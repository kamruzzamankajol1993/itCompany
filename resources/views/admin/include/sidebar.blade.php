<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Route::is('home')  ? '' : 'collapsed' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Portfolio Detail</li>


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('portfolio.index')  ? '' : 'collapsed' }}" href="{{ route('portfolio.index') }}">
          <i class="bx bx-file-blank"></i>
          <span>Portfolio Category</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('portfolioDetail.index')  ? '' : 'collapsed' }}" href="{{ route('portfolioDetail.index') }}">
          <i class="bx bx-file-blank"></i>
          <span>Portfolio Detail</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-heading">Service Detail</li>

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceTitle.index')  ? '' : 'collapsed' }}" href="{{ route('serviceTitle.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service Title</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('service.index')  ? '' : 'collapsed' }}" href="{{ route('service.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service Category</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceDetail.index')  ? '' : 'collapsed' }}" href="{{ route('serviceDetail.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service Detail</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('servicePrice.index')  ? '' : 'collapsed' }}" href="{{ route('servicePrice.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Service Price</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item ">
        <a class="nav-link {{ Route::is('serviceOrder.index')  ? '' : 'collapsed' }}" href="{{ route('serviceOrder.index') }}">
          <i class="bx bxs-file-doc"></i>
          <span>Ordered Service</span>
        </a>
      </li><!-- End Profile Page Nav -->





 <li class="nav-heading">Website</li>




      <li class="nav-item ">
        <a class="nav-link {{ Route::is('bannerList.index')  ? '' : 'collapsed' }}" href="{{ route('bannerList.index') }}">
          <i class="bi bi-image"></i>
          <span>Banner List</span>
        </a>
      </li><!-- End Profile Page Nav -->




            <li class="nav-item ">
        <a class="nav-link {{ Route::is('socialLink.index')  ? '' : 'collapsed' }}" href="{{ route('socialLink.index') }}">
          <i class="bx bx-world"></i>
          <span>Social Link</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item ">
        <a class="nav-link " href="">
          <i class="bx bx-paste"></i>
          <span>



              Review List

              </span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link " href="">
          <i class="bx bx-file"></i>
          <span>Return Policy</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link  " href="">
          <i class="bx bx-detail"></i>
          <span>Privacy Policy</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item ">
        <a class="nav-link {{ Route::is('messagePartOne.index')  ? '' : 'collapsed' }}" href="{{ route('messagePartOne.index') }}">
          <i class="bx bx-message-alt-detail"></i>
          <span>



               Message  Title List



              </span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item ">
        <a class="nav-link {{ Route::is('message.index')  ? '' : 'collapsed' }}" href="{{ route('message.index') }}">
          <i class="bx bx-message-alt-detail"></i>
          <span>

              @if($allMessageListCount == 0 )

               Message List

              @else

              Message List ({{$allMessageListCount}})

              @endif

              </span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-heading">Other</li>

      <li class="nav-item ">
        <a class="nav-link   {{ Route::is('systemInformation.index')  ? '' : 'collapsed' }}" href="{{ route('systemInformation.index') }}">
          <i class="bi bi-gear-fill"></i>
          <span>System Info</span>
        </a>
      </li><!-- End Profile Page Nav -->



    </ul>

  </aside>
