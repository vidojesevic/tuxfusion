$(document).ready(function() {
    getCategory();
    getJobs();
    hoverList();
});

function getJobs() {
    $('.list-jobs li').on('click', function() {
        const page = $(this).data('page');
        console.log(page);
        $('.job-content').load('index.php?page=' + page);
    });
}

function displayCategory(category) {
    let list = `<ul class="list-group sticky-top sticky-group">
                    <br/>
                    <h3 class='list-group-item'>Categories</h3>`;
    for (const i in category) {
        list += `<li class='list-group-item'>
                    <a href='#' data-id='${category[i].id_categorie}' class='text-dark fw-bold'>
                        <i class='fa-solid ${category[i].icon} text-success'></i>
                        &nbsp;&nbsp;${category[i].name}
                    </a>
                </li>`;
    }
    list += "</ul>"

    $('#categories').html(list);
}

function hoverList() {
    $('.hover-list').hover(
        function() {
            $(this).find('li').addClass('black');
        }, 
        function() {
            $(this).find('li').removeClass('black');
        }
    );
}

function getCategory() {
    // ajaxCallBack('category.php',
    ajaxCallBack('file.php',
        function(data){
            if (!data) {
                console.log("No data sent!");
            }
            displayCategory(data);
        },
        function(error, textStatus, errorThrown) {
            // console.log(window.location);
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
