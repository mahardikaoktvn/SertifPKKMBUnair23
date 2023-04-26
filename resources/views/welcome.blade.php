<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>e-Sertifikat PKKMB</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="/style.css">

</head>
<body>
 @foreach($mahasiswa as $mhs)
<!-- partial:index.partial.html -->
<div class="card" data-state="#about">
  <div class="card-header">
    <div class="card-cover" style="background-image: url('https://www.unair.ac.id/wp-content/uploads/2021/03/Photo-Slider.jpg')"></div>
    <img class="card-avatar" src="https://cybercampus.unair.ac.id/foto_mhs/{{ $mhs -> NIM }}.JPG" alt="avatar" />
    <h1 class="card-fullname">{{ $mhs -> NAMA }}</h1>
    <h2 class="card-jobtitle">{{ $mhs -> PRODI }} - FAKULTAS {{ $mhs -> FAKULTAS }}</h2>
  </div>
  <div class="card-main">
    <div class="card-section is-active" id="about">
      <div class="card-content">
        <div class="card-subtitle">KETERANGAN</div>
        <p class="card-desc">Anda Dinyatakan <b>{{ $mhs -> STATUS }}</b> di kegiatan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) Tahun 2022
        </p>
      </div>
      <div class="card-social">
        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" /></svg></a>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" /></svg></a>
        <a href="#"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
            <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
            <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" /></svg></a>
        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z" /></svg></a>
      </div>
    </div>
    <div class="card-section" id="experience">
      <div class="card-content">
        <div class="card-subtitle">PRESENSI KEGIATAN</div>
        <div class="card-timeline">
          <div class="card-item" data-year="18">
            <div class="card-item-title">18 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[18] }}</div>
          </div>
          <div class="card-item" data-year="19">
            <div class="card-item-title">19 Agustus 2022</div>
            <div class="card-item-desc">{{ $mhs[19] }}</div>
          </div>
          <div class="card-item" data-year="20">
            <div class="card-item-title">20 Agustus 2022</div>
            <div class="card-item-desc">{{ $mhs[20] }}</div>
          </div>
          <div class="card-item" data-year="22">
            <div class="card-item-title">22 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[22] }}</div>
          </div>
          <div class="card-item" data-year="23">
            <div class="card-item-title">23 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[23] }}</div>
          </div>
          <div class="card-item" data-year="24">
            <div class="card-item-title">24 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[24] }}</div>
          </div>
          <div class="card-item" data-year="25">
            <div class="card-item-title">25 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[25] }}</div>
          </div>
          <div class="card-item" data-year="26">
            <div class="card-item-title">26 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[26] }}</div>
          </div>
          <div class="card-item" data-year="27">
            <div class="card-item-title">27 Agustus 2022</span></div>
            <div class="card-item-desc">{{ $mhs[27] }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-section" id="contact">
      <div class="card-content">
        <div class="card-subtitle">BIODATA MAHASISWA</div>
        <div class="card-contact-wrapper">
          <div class="card-contact">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
              <circle cx="12" cy="10" r="3" /></svg>
              {{ $mhs -> NAMA }}
          </div>
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            {{ $mhs -> NIM }}</div>
          <div class="card-contact">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"></path>
            </svg>
            {{ $mhs -> PRODI }} - Fakultas {{ $mhs -> FAKULTAS }}
          </div>
        </div>
      </div>
    </div>
    <div class="card-buttons">
      <button data-section="#about" class="is-active">HOME</button>
      <button data-section="#experience">PRESENSI KEGIATAN</button>
      <button data-section="#contact">BIODATA MAHASISWA</button>
    </div>
  </div>
</div>
@endforeach
<!-- partial -->
  <script  src="/script.js"></script>

</body>
</html>
