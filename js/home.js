$(document).ready(function(){
    console.log("ready")
    var base_url = "http://localhost/template_shop/index.php/"
    $.ajax({
        url: base_url+"home/get_data",
        dataType:'json',
        type: 'post',
        data: { get_data:true },  // data to submit
        success: function (data, status) {
            console.log(data)
        },
        error: function ( errorMessage) {
            console.dir('Error' + errorMessage);
        }
    });

})