$.ajax({
    url : "template1.htm",
    dataType: "text",
    success : function (data) {
        $(".paneldecontenido").html(data);
    }
});