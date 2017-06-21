$(".transaction-timeline-action").on('click', function(e) {
    e.preventDefault();
    var classes = $(this).parent().next().attr("class").split(' ');
    var isActive = false;
    for (var i = 0; i < classes.length; i++) {
        if (classes[i] === 'active')
        {
            isActive = true;
        }
    }

    if (isActive) {
        $(this).parent().next().removeClass("active");
        $(this).children("i").addClass("fa-chevron-down");
        $(this).children("i").removeClass("fa-chevron-up");
    }
    else {
        $(this).parent().next().addClass("active");
        $(this).children("i").removeClass("fa-chevron-down");
        $(this).children("i").addClass("fa-chevron-up");
    }
});
$("#filterForm").on("submit", function(e) {
    e.preventDefault();
    console.log("Filter submitted");
});
$("#statusTrans").on("change", function(e) {
    console.log("Filter select changed");
    $(this).parent().parent().parent("form").submit();
})
$("#startdate").on("change", function(e) {
    console.log("Filter start date changed");
    $(this).parent().parent().parent("form").submit();
})
$("#enddate").on("change", function(e) {
    console.log("Filter end date changed");
    $(this).parent().parent().parent("form").submit();
})