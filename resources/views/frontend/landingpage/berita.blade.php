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
                     <h2 class="fw-bolder fs-9 text-white">Rilis Media</h2>
                  </div>
                  <div>
                     <select class="form-select w-auto bg-white">
                        <option value="1">March 2024</option>
                        <option value="2">April 2024</option>
                        <option value="3">May 2024</option>
                        <option value="4">June 2024</option>
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
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7 h-100">
                              <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       The future of web: what's next in 2024?
                                    </a>
                                    <p class="mb-0 fs-4 truncated-text">
                                       Explore the latest trends and technologies that are shaping the future of web
                                       development, including AI-driven design and serverless architectures.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Top 5 javascript frameworks to learn this year
                                    </a>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-4 truncated-text">
                                       With so many options available, find out which javascript frameworks are worth
                                       your time and effort in 2024.
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Understanding web accessibility: for beginners
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       Accessibility is more important than ever. Discover the key principles and
                                       techniques to make your website accessible to all users.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       How optimize your website's performance with caching
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       Caching can significantly improve your website's speed and user experience.
                                       Learn how to implement it effectively.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Designing for user experience: the essential ux principles
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       User experience is at the heart of successful web design. Explore the essential
                                       principles to create user-friendly interfaces.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Getting started with headless cms: the pros and cons
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       Headless CMS is gaining popularity, but is it right for your project? Understand
                                       the advantages and disadvantages before making the switch.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Why every developer should learn version control
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       Version control is a crucial skill for any developer. Find out why it matters
                                       and how it can improve your workflow.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7 h-100">
                              <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       Creating animations with css: a beginner's guide
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       CSS animations can bring your website to life. Learn how to create smooth,
                                       engaging animations with this step-by-step guide.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                        <div class="card rounded-3 overflow-hidden">
                           <a href="../main/frontend-blogdetailpage.html" class="position-relative">
                              <img src="https://web.kominfo.go.id/resource/dXBsb2Fkcy8yMDI0LzEwLzA3LzQ5Y2U4MWRkLTBjODEtNDM1ZC1iNjUxLTBlYWI1YzVhOTJlNC5qcGVn" alt="blog image" class="w-100 img-fluid">
                              <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                                    <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                              </div>
                              <div class="position-absolute bottom-0 ms-7 mb-n9">
                                    <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle"
                                       width="44px" height="44px">
                              </div>
                           </a>
                           <div class="mt-10 px-7 pb-7">
                              <div class="d-flex gap-3 flex-column">
                                    <div class="d-flex">
                                       <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                                          Web Development
                                       </p>
                                    </div>
                                    <a href="../main/frontend-blogdetailpage.html" class="fs-15 fw-bolder">
                                       How to start freelance career in web development
                                    </a>

                                    <p class="mb-0 fs-4 truncated-text">
                                       Thinking about going freelance? Discover the essential steps to building a
                                       successful career in web development.
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex gap-9">
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-eye fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                                          </div>
                                          <div class="d-flex gap-2">
                                                <i class="ti ti-message fs-5 text-dark"></i>
                                                <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                                          </div>
                                       </div>
                                       <div class="d-flex align-items-center gap-2">
                                          <i class="ti ti-circle fs-2"></i>
                                          <p class="mb-0 fs-2 fw-semibold text-dark">Tue, May 2</p>
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
