</div>
<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="" target="_blank">HumanResources</a>.</p>
    <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
</footer>
</div>
</div>

<script src="{{ asset('Backend_Theme/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('Backend_Theme/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('Backend_Theme/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('Backend_Theme/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('Backend_Theme/assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('Backend_Theme/assets/js/dashboard-dark.js') }}"></script>
	<!-- End custom js for this page -->


    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.0-alpha.2/js/ionicons.min.js" integrity="sha512-..." crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('Backend_Theme/assets/js/code.js') }}"></script>




    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;

       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;

       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;

       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break;
    }
    @endif





    $(function(){
       $(document).on('click','#delete',function(e){
           e.preventDefault();
           var link = $(this).attr("href");


                     Swal.fire({
                       title: 'Are you sure?',
                       text: "Delete This Data?",
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Yes, delete it!'
                     }).then((result) => {
                       if (result.isConfirmed) {
                         window.location.href = link
                         Swal.fire(
                           'Deleted!',
                           'Your file has been deleted.',
                           'success'
                         )
                       }
                     })


       });

     });


   </script>


@yield('js')
</body>
</html>
