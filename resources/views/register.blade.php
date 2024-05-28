<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
      <img src="your-image-url-here.jpg">
      {{-- <form action="{{ route('data_peserta.store') }}" method="POST" enctype="multipart/form-data"> --}}
          @csrf
          <div class="formbold-form-title">
              <h2 class="">Pendaftaran Peserta</h2>
              <p>Mencetak generasi sholeh, berilmu dan memimpin</p>
          </div>
          
          <div class="formbold-mb-3">
              <div>
                  <label for="nama_lengkap" class="formbold-form-label">Nama lengkap</label>
                  <input type="text" name="nama_lengkap" id="nama_lengkap" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="email" class="formbold-form-label">Email</label>
                  <input type="email" name="email" id="email" class="formbold-form-input"/>
              </div>
              <div>
                  <label for="no_hp_aktif" class="formbold-form-label">No HP aktif</label>
                  <input type="text" name="no_hp_aktif" id="no_hp_aktif" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-mb-3">
              <label for="alamat" class="formbold-form-label">Alamat sekarang</label>
              <input type="text" name="alamat" id="alamat" class="formbold-form-input"/>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="tempat_lahir" class="formbold-form-label">Tempat lahir</label>
                  <input type="text" name="tempat_lahir" id="tempat_lahir" class="formbold-form-input"/>
              </div>
              <div>
                  <label for="tanggal_lahir" class="formbold-form-label">Tanggal lahir</label>
                  <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="asal_sekolah" class="formbold-form-label">Asal sekolah</label>
                  <input type="text" name="asal_sekolah" id="asal_sekolah" class="formbold-form-input"/>
              </div>
              <div>
                  <label for="jenis_kelamin" class="formbold-form-label">Jenis kelamin</label>
                  <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="jalur_pendaftaran" class="formbold-form-label">Jalur pendaftaran</label>
                  <select name="jalur_pendaftaran" id="jalur_pendaftaran" class="formbold-form-input">
                      <option value="">Pilih Jalur Pendaftaran</option>
                      <option value="Jalur Prestasi">Jalur Undangan</option>
                      <option value="Jalur Zonasi">Jalur Prestasi</option>
                      <option value="Jalur Afirmasi">Jalur Reguler</option>
                  </select>
              </div>
              <div>
                  <label for="upload_berkas" class="formbold-form-label">Upload berkas</label>
                  <input type="file" name="upload_berkas" id="upload_berkas" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="nama_ayah" class="formbold-form-label">Nama ayah</label>
                  <input type="text" name="nama_ayah" id="nama_ayah" class="formbold-form-input"/>
              </div>
              <div>
                  <label for="no_hp_aktif_2" class="formbold-form-label">No HP aktif</label>
                  <input type="text" name="no_hp_aktif_2" id="no_hp_aktif_2" class="formbold-form-input"/>
              </div>
          </div>
          
          <div class="formbold-input-flex">
              <div>
                  <label for="alamat_ayah" class="formbold-form-label">Alamat</label>
                  <input type="text" name="alamat_ayah" id="alamat_ayah" class="formbold-form-input"/>
              </div>
              <div>
                  <label for="pekerjaan" class="formbold-form-label">Pekerjaan</label>
                  <input type="text" name="pekerjaan" id="pekerjaan" class="formbold-form-input"/>
              </div>
          </div>
          
          <button class="formbold-btn">Daftar</button>
      </form>
  </div>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
    }
    .formbold-mb-3 {
      margin-bottom: 15px;
    }
    .formbold-relative {
      position: relative;
    }
    .formbold-opacity-0 {
      opacity: 0;
    }
    .formbold-stroke-current {
      stroke: currentColor;
    }
    #supportCheckbox:checked ~ div span {
      opacity: 1;
    }
  
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }
  
    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }
  
    .formbold-img {
      margin-bottom: 45px;
    }
  
    .formbold-form-title {
      margin-bottom: 30px;
    }
    .formbold-form-title h2 {
      font-weight: 600;
      font-size: 28px;
      line-height: 34px;
      color: #07074d;
    }
    .formbold-form-title p {
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      margin-top: 12px;
    }
  
    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }
    .formbold-input-flex > div {
      width: 50%;
    }
    .formbold-form-input {
      text-align: center;
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
      color: #536387;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }
  
    .formbold-checkbox-label {
      display: flex;
      cursor: pointer;
      user-select: none;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-checkbox-label a {
      margin-left: 5px;
      color: #6a64f1;
    }
    .formbold-input-checkbox {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }
    .formbold-checkbox-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      margin-right: 16px;
      margin-top: 2px;
      border: 0.7px solid #dde3ec;
      border-radius: 3px;
    }
  
    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  </style>