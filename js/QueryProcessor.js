class QueryProcessor {

    getGameResults(){

        $.get("php/PlayGame.php")
        .done(function (data) {
            alert(data);
        })
        .fail(function() {
            alert("error");
        });
    }
}