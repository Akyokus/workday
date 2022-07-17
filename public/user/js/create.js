var indexURL = "http://localhost/qtech/";

    $(".create").click(function(){
        var startDate = $("#started").val();
        var finishDate = $("#finished").val();
        $.post(indexURL,{
            start: startDate,
            finish: finishDate
        },
            function (result){
                alert(result);
            });

    });

