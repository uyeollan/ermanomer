! function(a) {
    "use strict";
    var b = function() {};
    b.prototype.init = function() {
        a("#sa-basic").click(function() {
            swal("Here's a message!")
        }), a("#sa-title").click(function() {
            swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
        }), a("#sa-success").click(function() {
            swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
        }), a("#sa-warning").click(function() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: !1
            }, function() {
                swal("Deleted!", "Your imaginary file has been deleted.", "success")
            })
        }), a("#sa-params").click(function() {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: !1,
                closeOnCancel: !1
            }, function(a) {
                a ? swal("Deleted!", "Your imaginary file has been deleted.", "success") : swal("Cancelled", "Your imaginary file is safe :)", "error")
            })
        }), a("#sa-image").click(function() {
            swal({
                title: "Sweet!",
                text: "Here's a custom image.",
                imageUrl: "assets/plugins/sweetalert/thumbs-up.jpg"
            })
        }), a("#sa-close").click(function() {
            swal({
                title: "Auto close alert!",
                text: "I will close in 2 seconds.",
                timer: 2e3,
                showConfirmButton: !1
            })
        })
    }, a.SweetAlert = new b, a.SweetAlert.Constructor = b
}(window.jQuery),
function(a) {
    "use strict";
    a.SweetAlert.init()
}(window.jQuery);
