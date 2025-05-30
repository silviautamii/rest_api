<div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>/assets/img/icinprofile.jpg" class="rounded-circle img-thumbnail" width="300" height="200">
          <h1 class="display-4">Silvia Utami Putri</h1>
          <h3 class="lead">College Student | Editor</h3>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/Sawahlunto.jpg" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Lahir di Sawahlunto, 07 Juni 2004</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/sd.jpeg" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Sekolah Dasar di SDN 15 Kumanih Ateh</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/smp.jpeg" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Pertama di MTsN 1 Kota Sawahlunto dan Lulus pada Tahun 2019</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/sma.webp" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Atas di SMAN 2 Sawahlunto dan Lulus pada Tahun 2022.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/uinib.jpg" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Kuliah di Universitas Uin Imam Bonjol Negeri Padang.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/fst.jpeg" alt="Card image cap" width="100%" height="200">
              <div class="card-body">
                <p class="card-text">Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Yuk, mulai percakapan! Mungkin dari sini kita bisa membangun sesuatu yang luar biasa bersama di dunia digital.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">Sungai Bangek</li>
              <li class="list-group-item">Padang</li>
              <li class="list-group-item">Sumatra Barat, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>