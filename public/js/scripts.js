$(document).ready(function() {
    getJobs();
});

function getJobs() {
    $('.list-jobs li').on('click', function() {
        const page = $(this).data('page');
        console.log(page);
        $('.job-content').load('index.php?page=' + page);
    });
}

// function displayCategory() {
//     
// }
