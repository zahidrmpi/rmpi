<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rajshahi Mohial Polytechnic Institute</title>
  <?php wp_head() ?>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="offset-md-1 col-md-10 offset-md-1 main-area-bg">
      <!-- Header area start -->
        <header>
          <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="header-bg">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="logo">
                          <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.jpg'; ?>" alt="">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="institute_title">
                          <h1><?php bloginfo() ?></h1>
                          <p>নওদাপাড়া বাইপাস, সপুরা-৬২০৩,রাজশাহী</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="comunicating_address">
                          <p>টেলিফোনঃ ০২৪৭ ৮৬০০৪৪</p>
                          <p>ইমেইলঃ rmpi2003@gmail.com</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </header>
        <!-- header area remove -->
        <!-- slider area start  -->
        <section class="slider-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme">
                <div class="slider-item"></div>
                <div class="slider-item"></div>
                <div class="slider-item"></div>
                <div class="slider-item"></div>
                <div class="slider-item"></div>
              </div>
            </div>
          </div>
        </div>
        </section>
        <!-- slider area end  -->
        <!-- main menu area start -->
         <section class="navigation">
           <div class="container">
             <div class="row">
               <div class="col-md-12">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'topmenu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
            
               <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'topmenu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
            
               </div>
             </div>
           </div>
         </section>
        <!-- main menu area end -->
        <!-- news scroll area start -->
        <section class="news_scroll_area">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="news_scroll_area_content">
                  <marquee behavior="2" direction="left">
                       রাজশাহী মহিলা পলিটেকনিক ইন্সটিটিউটে ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রমের ২০১২-১৩ শিক্ষাবর্ষ বা তার পুর্বের শিক্ষাবর্ষে ১ম পর্বে ভর্তিকৃত ছাত্রী এবং সংশ্লিষ্ট সকলের অবগতির জন্য জানানো যাচ্ছে যে, উক্ত শিক্ষাবর্ষের যে সকল শিক্ষার্থী ডিপ্লোমা ইন ইঞ্জিনিয়ারিং ৮ম পর্ব সমাপনী পরীক্ষায় উত্তীর্ণ হয়েছে কিন্তু জামানতের টাকা উত্তোলন করেনি, তাদেরকে আগামী ১২-১২-২০২০ খ্রিঃ তারিখের মধ্যে জরুরি ভিত্তিতে উক্ত জামানতের টাকা অত্র প্রতিষ্ঠান থেকে উত্তোলনের নির্দেশ প্রদান করা হলো। উপোরোক্ত সময়ের মধ্যে টাকা উত্তোলন না করলে তা রাষ্ট্রীয় কোষাগারে জমা প্রদান করা হবে এবং পরবর্তীতে সে/তিনি জামানতের টাকা দাবী করতে পারবেনা। বিস্তারিত জানতে এখানে ক্লিক করুন
                  </marquee>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- news scroll area end -->
        <!-- main section area start -->
        <section class="main_section_area">
          <div class="container">
            <div class="row">
              <!-- content area start -->
              <div class="col-md-9">
                <div class="content">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione eaque debitis fugit amet. Eligendi id rem laborum tenetur, illo ab ex nisi minus dicta praesentium excepturi impedit nesciunt optio dolor qui laboriosam incidunt facere necessitatibus labore officiis non. Sapiente quas maxime consequuntur voluptatem excepturi molestiae quos possimus! Minus explicabo ratione quo iste. Inventore suscipit officiis corporis ipsam pariatur voluptates quo a eum dolor non sed itaque mollitia ducimus, explicabo officia! Deleniti tempore quasi eaque ullam iste, reiciendis voluptates quibusdam, exercitationem aspernatur ut dolore atque? Rem, dolorum optio ab nulla accusamus explicabo nemo, omnis consequatur vel nihil soluta cum neque alias cumque similique, earum amet doloribus repellat sint dolores voluptate expedita. Delectus voluptates assumenda officia, architecto nulla tempora itaque unde aperiam officiis. Ducimus labore ut vero praesentium error eius alias in enim voluptatum? Quaerat et blanditiis quibusdam earum. Debitis, cumque reiciendis ut suscipit iste ad quis aut consequuntur enim, qui, incidunt laudantium sint molestias? Velit amet placeat quia officia dicta, quo sequi magni minima doloribus, ratione repellat asperiores labore nobis? Officia commodi dolor exercitationem sapiente minima sequi dicta mollitia perferendis placeat omnis consequuntur ut soluta ducimus, incidunt alias esse odio eius, neque voluptatum eum fuga! Eveniet autem quibusdam sed minus iusto qui sapiente voluptate, architecto, asperiores saepe adipisci vero provident nam mollitia! Sint voluptatibus, explicabo asperiores fuga labore, sit quia voluptatum ea reiciendis doloremque soluta modi, corporis cum rerum vero numquam in libero? Repellat, quas? Voluptates odio reiciendis porro id modi quae aperiam necessitatibus soluta dolore fugit dignissimos, laudantium obcaecati, expedita sapiente voluptatem alias tempore ad veniam eos ex rem qui repellendus! Omnis nemo, hic officia ipsum quae ab molestias eos nobis at ad quas adipisci autem dignissimos cumque maxime debitis aspernatur enim aliquam voluptates delectus illum totam! Qui culpa dicta natus quia sequi praesentium incidunt similique pariatur provident debitis? Alias magni dignissimos consequatur dicta recusandae doloremque architecto pariatur. Vel eligendi adipisci illum corrupti labore quis ex voluptatem ea non, perspiciatis, doloribus sequi sint, nisi id est perferendis nulla obcaecati temporibus laborum minus nam iusto dolore? Nesciunt, sit inventore! Obcaecati itaque accusantium voluptate quo. In impedit obcaecati odit quod magnam! Mollitia vero in suscipit dignissimos officia est aspernatur pariatur sunt, atque deserunt error totam. Quis, voluptatibus, quas officia laborum veritatis quos, id sapiente et at illum vero dolorem aut. Modi dolorem sed repudiandae natus cupiditate porro nulla deleniti delectus corporis assumenda. Impedit nemo voluptatum libero sed animi, velit magnam eum cupiditate fuga facilis corrupti necessitatibus in veritatis optio magni deserunt omnis quia dicta incidunt nihil perspiciatis cumque architecto illum. Saepe voluptas blanditiis quod. Exercitationem, dignissimos mollitia natus ullam dolores qui praesentium repellat ut odit esse voluptates, tempore quidem aspernatur itaque eligendi harum fugiat! Ipsum cum corporis accusantium eos omnis officiis aliquid eveniet consequuntur, voluptatum adipisci, in et laboriosam? Distinctio veritatis et recusandae. Animi vel atque consequatur, velit alias pariatur rerum veniam fuga illum eligendi ab ratione odio consequuntur porro nemo veritatis accusamus, saepe voluptate provident culpa error, nihil quisquam odit. Veniam praesentium sed ex dicta quae perspiciatis atque voluptates, officiis officia in deleniti dolor modi soluta reiciendis maiores vel aut enim expedita, quaerat temporibus optio error? Aliquam voluptatem voluptatum, reiciendis tempore reprehenderit magni consequatur harum voluptas, repellat obcaecati voluptates voluptate similique fugiat? Dignissimos laborum fugit quo quaerat voluptates nesciunt ab quam. Molestiae sequi consectetur tempora dignissimos, laboriosam numquam distinctio itaque tenetur. Deleniti atque iusto sunt sequi corporis similique reiciendis facilis ipsa illo ratione. Est commodi laboriosam laudantium accusamus debitis architecto tempore, ut dolore dolorum quia. Veritatis repudiandae asperiores voluptates fuga nihil rerum natus sunt recusandae. Quisquam deleniti qui incidunt fugiat? Dignissimos nostrum enim consectetur accusamus dolor a minima, eaque vitae, illo corrupti doloribus, illum autem mollitia? Aliquid tempore incidunt vitae molestiae quasi suscipit nulla qui necessitatibus aperiam accusantium debitis iure optio, voluptates porro. Iusto fugiat nulla voluptates, perspiciatis eveniet maxime excepturi aperiam corrupti. Dolore at, iste, quidem in laboriosam fugit et pariatur asperiores nesciunt error corrupti dolorum distinctio impedit reprehenderit voluptas aperiam ut delectus sed minus. Nisi rerum ipsum placeat, magni, alias accusantium quibusdam deleniti obcaecati odit similique quae provident eaque? Natus sunt veniam alias minima, ad nostrum consequatur odio aut assumenda, ex repudiandae ipsam beatae ea, doloribus dolorem inventore minus eos? Ipsa alias voluptates qui delectus quibusdam non eos repellendus reiciendis adipisci suscipit tenetur aut, consequatur incidunt praesentium saepe est corrupti illo rem! Ipsa dolorum totam earum omnis accusantium doloremque consectetur incidunt adipisci, laboriosam dignissimos itaque voluptatibus? Veritatis dicta ad atque numquam, recusandae assumenda quo itaque suscipit quaerat voluptas quas accusantium, saepe magni nemo ipsa illo beatae voluptatem! Corrupti accusantium nostrum repellendus dolore eligendi, architecto eos praesentium dolores molestiae doloremque optio reiciendis totam incidunt numquam non sunt voluptate in quisquam? Deserunt voluptatem itaque, fugiat labore ad nobis vel! Rem aspernatur, voluptatibus modi itaque a cupiditate rerum iure quibusdam veritatis tempora incidunt, quia repellat nobis aut dolorem ducimus et exercitationem labore ullam sed ab mollitia? Eaque unde repellat recusandae voluptates nostrum accusamus, numquam animi excepturi. Excepturi perferendis deserunt quaerat ipsa maiores delectus, saepe earum velit nihil atque, voluptates voluptas necessitatibus eaque laborum distinctio. Autem, iusto ipsam! Dolorem non consectetur maiores explicabo, porro harum quaerat blanditiis alias tenetur eos est sapiente quos ab fugit distinctio sint, doloribus perspiciatis sit minus saepe beatae earum possimus atque aperiam! Animi debitis optio quo recusandae, ullam fugit vel esse iure, fuga amet odit perferendis quisquam quis sed numquam eum architecto id qui hic necessitatibus tempora placeat culpa error. Nulla commodi praesentium inventore velit voluptate doloribus maiores aspernatur corrupti aliquam itaque, quae animi aliquid quos omnis beatae recusandae dolorem maxime asperiores ipsa illo aperiam pariatur culpa. Accusantium excepturi molestiae nulla ducimus esse facere aliquid minima eius exercitationem quos. Libero nam suscipit iste minus. Repellendus ad tenetur quam officia molestiae minima culpa. Earum repellat sunt molestias harum minima ipsam veniam, maxime nobis reiciendis eveniet consequatur, voluptate voluptatum ducimus! Laudantium cumque, minima itaque consectetur ullam labore aliquam molestiae, dignissimos consequuntur vero enim sed nihil, magni molestias! Rem non ratione quisquam obcaecati doloremque, vero laborum earum? Pariatur deleniti ullam eaque eos quae porro, eligendi dolorem? Hic quibusdam ut placeat ipsam!
                  </p>
                </div>
              </div>
              <!-- content area end -->
             <!-- sidebar area start -->
             <div class="col-md-3">
              <div class="sidebar">
                <!-- sidebar item start -->
                <div class="sidebar-item">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title sidebar_name_title">মহাপরিচালক,  কারিগরি শিক্ষা অধিদপ্তর</h5>
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/sanoar_hossen.jpg'?>" class="card-img-top" alt="DTE Director Picture">
                      <p class="card-text">মোঃ সানোয়ার হোসেন</p>
                    </div>
                  </div>
                 </div>
                <!-- sidebar item end -->
                <!-- sidebar item start -->
                <div class="sidebar-item">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title sidebar_name_title">অধ্যক্ষ, রাজশাহী মহিলা পলিটেকনিক ইন্সটিটিউট</h5>
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/omar faruk.jpg'?>" class="card-img-top" alt="DTE Director Picture">
                      <p class="card-text">মোঃ ওমর ফারুক</p>
                    </div>
                  </div>
                 </div>
                <!-- sidebar item end -->
                <!-- sidebar item start -->
                <div class="sidebar-item">
                  <div class="card text-center">
                    <div class="card-body">
                      <h5 class="card-title sidebar_name_title">ডিজিটাল বাংলাদেশ দিবস ২০১৯ - সংগীত ভিডিও</h5>
                      <iframe width="100%" src="https://www.youtube.com/embed/CGEr6m8aUwQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><a href="https://www.youtube.com/embed/CGEr6m8aUwQ" class="mfp-iframe video-button"></a>

                    </div>
                  </div>
                 </div>
                <!-- sidebar item end -->
              </div>
            </div>
             <!-- sidebar area end -->

            </div>
          </div>
        </section>
        <!-- main section area end -->
        <!-- footer area start -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="footer_area">
                  <p>কপিরাইট &copy; 2020 রাজশাহী মহিলা পলিটেকনিক ইন্সটিটিউট</p>
                </div> 
              </div>
            </div>
          </div>
        </footer>
          <!-- footer area end -->
    </div>
  </div>
</div>
<?php wp_footer() ?>
</body>
</html>