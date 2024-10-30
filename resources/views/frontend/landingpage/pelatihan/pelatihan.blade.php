@extends('frontend.layouts.main')
@include('frontend.layouts.header')
@include('frontend.layouts.footer')



@section('contents')
   <div class="main-wrapper overflow-hidden">
      <!-- ------------------------------------- -->
      <!-- banner Start -->
      <!-- ------------------------------------- -->
      <section class="bg-primary py-14">
            <div class="container-fluid">
               <div class="d-flex justify-content-between align-items-center">
                  <div class="text-left">
                     <h2 class="fw-bolder fs-9 text-white">Pelatihan</h2>
                  </div>
                  <div class="d-flex justify-content-right align-items-center gap-2">
                     <select class="form-select w-auto bg-white">
                        <option>Pilihan tema</option>
                     </select>
                  </div>
               </div>
            </div>
      </section>
      <!-- ------------------------------------- -->
      <!-- banner End -->
      <!-- ------------------------------------- -->

      <!-- ------------------------------------- -->
      <!-- List Start -->
      <!-- ------------------------------------- -->
      <section class="pt-5 pt-md-14 pt-lg-12 pb-4 pb-md-5 pb-lg-14">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="{{ url('/pelatihan/1') }}" class="position-relative">
                              <img src="https://proglat-assets.kemnaker.go.id/programs/57d2c0ad-c254-4a2d-b317-3806c3962d6b/cover-images/XUFcT9NQXe2BKx0pNYwgmBIOBpnORP5ZkpaBLKv2.jpeg?OSSAccessKeyId=LTAI4G5zaYtL24qRhVo83PVj&Expires=1729862000&Signature=3tdBdEGp7I84a4nccIDjUHqwjiw%3D" alt="blog image" class="w-100 img-fluid">
                           </a>
                           <div class="mt-10 px-7 pb-7 h-100">
                              <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="{{ url('/pelatihan/1') }}" class="fs-15 fw-bolder">
                                       The future of web: what's next in 2024?
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-calendar fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Periode : April 2024</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
               </div>
            </div>

            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
                  <!-- Previous button -->
                  <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>

                  <!-- Page numbers -->
                  <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>

                  <!-- Next button -->
                  <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                  </li>
               </ul>
            </nav>

      </section>
      <!-- ------------------------------------- -->
      <!-- List End -->
      <!-- ------------------------------------- -->
   </div>
@endsection
