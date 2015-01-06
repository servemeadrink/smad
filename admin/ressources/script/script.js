/**
 * Created by KIYAN on 02/01/2015.
 */

function marginTopLogIn(){

    var documentHeight = $(document).height();

    var logHeight = $('#log').height();

    var marginTopLog = (documentHeight - logHeight) / 2;

    $('#log').css('margin-top' , marginTopLog);
}


$(document).ready(function(){
    var documentHeight = $(document).height() - 60;

    marginTopLogIn();

    $('#content').height(documentHeight);
});

$(document).resize(function(){
    var documentHeight = $(document).height() - 60;

    marginTopLogIn();

    $('#content').height(documentHeight);

});