$(document).ready(function() {
    getCategory();
    getJobs();
    hoverList('.hover-list li');
    hoverDynamic('#categories');
    activateTag();
});

function getJobs() {
    $('.list-jobs li').on('click', function() {
        const page = $(this).data('page');
        console.log(page);
        $('.job-content').load('index.php?page=' + page);
    });
}

function hoverList(selector) {
    const child = $(selector).next();
    $(document).on('mouseenter', child,
        function() {
            $(this).addClass('black');
        }).on('mouseleave', child, 
            function() {
                $(this).removeClass('black');
            });
}

function activateTag() {
    const tag = $('#categories').children().children();
    $(tag).on('click', function() {
        console.log('clicked');
    })
}

function hoverDynamic(selector) {
    $(document).on('mouseenter', selector,
        function() {
            $(this).find('li').addClass('black');
        }).on('mouseleave', selector, 
            function() {
                $(this).find('li').removeClass('black');
            });
}

function displayCategory(category) {
    let list = `<ul class="list-group sticky-top sticky-group">
                    <br/>
                    <h3 class='list-group-item'>Categories</h3>`;
    for (const i in category) {
        list += `<li class='list-group-item btn text-start' data-page='products/${category[i].name}'>
                    <a href='#' data-id='${category[i].id_categorie}' class='text-dark fw-bold'>
                        <i class='fa-solid ${category[i].icon} text-success'></i>
                        &nbsp;&nbsp;${category[i].name}
                    </a>
                </li>`;
    }
    list += "</ul>"
    // const categoryDiv = $('#categories')[0];
    // const ul = document.createElement('ul');
    // ul.className = 'list-group sticky-top sticky-group';
    // ul.innerHTML = `<br/><h3 class='list-group-item'>Categories</h3>`;
    //
    // for (const i in category) {
    //     const li = document.createElement('li');
    //     li.className = 'list-group-item dina-list';
    //     li.dataset.page = `products/${category[i].name}`;
    //
    //     const a = document.createElement('a');
    //     a.href = 'index.php?page=category';
    //     a.className = 'text-dark fw-bold active';
    //
    //     const icon = document.createElement('i');
    //     icon.className = `fa-solid ${category[i].icon} text-success`;
    //
    //     const text = document.createTextNode(` ${category[i].name}`);
    //             
    //     a.appendChild(icon);
    //     a.appendChild(text);
    //     li.appendChild(a);
    //     ul.appendChild(li);
    // }


    // categoryDiv.appendChild(ul);
    document.querySelector('#categories').innerHTML = list;
}

function getCategory() {
    ajaxCallBack('./endpoints/category.php',
        function(data){
            if (!data) {
                console.log("No data sent!");
            }
            displayCategory(data);
        },
        function(error, textStatus, errorThrown) {
            console.log(error);
            console.log(textStatus);
            console.log(errorThrown);
        }
    );
}

function ajaxCallBack(url, successFunction, errorFunction) {
    $.ajax({
        url: url,
        method: 'GET',
        CORS: true,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: successFunction,
        error: errorFunction,
        headers: {
            "accept": "application/json",
            'Access-Control-Allow-Origin': '*',
        },
    });
}
