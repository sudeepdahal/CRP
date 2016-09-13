$(document).ready(function() {

    var $fields = $(".email :input");
    $fields.keyup(function() {
        var $emptyFields = $fields.filter(function() {

            // remove the $.trim if whitespace is counted as filled
            return $.trim(this.value) === "";
        });

        if (!$emptyFields.length) {
            alert("form has been filled");
        } else {
            alert("uh-oh, you forgot to fill something out");
        }
    });
});


// $(":text, :file, :checkbox, select, textarea").each(function() {
//    if($(this).val() === "")
//     alert("Empty Fields!!");
// });