</div>

</div>
<!-- End: Customizer-->



</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a class="ms-25" href="" target="_blank">C5-HOTEL</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
</footer>


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('backend/app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/customizer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-toastr.min.js') }}"></script>
<!-- END: Page JS-->

{{-- <!--INITIALIZE TOASTR-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/polyfill.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('backend/app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') }}"></script>
    <!-- END: Page JS-->




   <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
  <script src="{{ asset('backend/js/pages/data-table.js') }}"></script>








    <script src="{{ asset('backend/app-assets/js/scripts/forms/form-quill-editor.min.js') }}"></script>
  <!-- BEGIN: Page Vendor JS-->
  <script src="{{ asset('backend/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
  <script src="{{ asset('backend/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
  <script src="{{ asset('backend/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
  <!-- END: Page Vendor JS-->

  <!---datatable--->


<script>

$(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var minDate = year + '-' + month + '-' + day;

        $('.date').attr('min', minDate);
    });



function search_result_hide(){
    $("#searchproject").slideUp();
 }

 function search_result_show(){
    $("#searchproject").slideDown();
 }





 $("body").on("keyup", "#search", function(){
let text = $("#search").val();
if(text.length > 0){
$.ajax({
   data: {search: text},
   url:  "/reception/search/result",
   method: 'post',
   beforSend: function(request){
      return request.setRequestHeader('X-CSRF-Token',("meta[name='csrf-token]"))
   },
   success:function(result){
       $("#searchproject").html(result);
   }

});
}//end if
if(text.length < 1) $("#searchproject").html(" ");



});

$.ajaxSetup({
headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.ajax({

});



  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>
<script>

$(function(){

@if(Session::has('success'))
    Swal.fire({
    icon: 'success',
    title: 'Great!',
    text: '{{ Session::get("success") }}'
})
@endif
});

@if(Session::has('error'))
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ Session::get("error") }}'
    })
@endif

@if(Session::has('warning'))
    Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: '{{ Session::get("warning") }}'
    })
@endif





        //delete
        $(function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var link = $(this).attr("href");


    Swal.fire({
        title: 'Are you sure?',
        text: "To Deleted This Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'No',
        confirmButtonText: 'Yes, Delete!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Data Has Been Deleted Successfully.',
            'success'
          )
          window.location.href = link
        }
      });


      });

        });




      //toastr notification
      window.addEventListener('alert', event => {
      toastr[event.detail.type](event.detail.message,
      event.detail.title ?? ''), toastr.options = {
         "closeButton": true,
         "progressBar": true,
       }
     });



     ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );

            	$(window).ready(function() {
	$("form").on("keypress", function (event) {
		var keyPressed = event.keyCode || event.which;
		if (keyPressed === 13) {
			event.preventDefault();
			return false;
		}
	});
	});

</script>
</body>

</html>
