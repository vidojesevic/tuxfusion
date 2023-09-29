$(document).ready(function() {
    getCategory();
    getJobs();
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
                        <i class='fa-solid ${category[i].icon}'></i>
                        ${category[i].name}
                    </a>
                </li>`;
    }
    list += "</ul>"

    $('#categories').html(list);
}

function getCategory() {
    ajaxCallBack('get', '../../app/utilities/CategoryEndpoint.php', 
        function(result){
            displayCategory(result);
        },
        function(error) {
            console.log(error);
        }
    );
}

function ajaxCallBack(url, method, successFunction, errorFunction) {
    $.ajax({
        url: url,
        method: method,
        dataType: "json",
        success: successFunction,
        error: errorFunction
    });
}
