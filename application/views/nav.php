<style>
   .btnlogout {
      cursor: pointer;
      transition: all 0.3s;
      padding: 0.7em;
      border: none;
      font-size: 0.9em;
   }
   .headmenu{
      display: flex;
      align-items: center;
      padding: 1em 0.5em;
      border-bottom: 1px solid rgb(230,230,230);
      margin-bottom: 1em;
      gap: 1em;
   }
   .headmenu>div>p{
      font-size: 0.8em;
      margin-top: 0.3em;
      opacity: 0.6;
   }
   .btnlogout:hover {
      background: #cb014f
   }
   a>i{
      width: 1.3em;
   }
</style>
<div id="apps"></div>
<script type="text/babel">
   const App = () => {
      const handleLogOut = () => {
         let confirm = window.confirm('Anda yakin ingin Log Out?')
         if(confirm){
            window.location.href="<?=base_url()?>"
         }
      }
      return (
         <nav className="navigation">
            <div>
               <div>
                  <a href="<?= base_url() ?>" className="headmenu">
                     <img src="<?=$url?>" alt="logo kampus" width="40" height="40"/>
                     <div>
                        <h3>UNSIA Menu</h3>
                        <p>Universitas Siber Asia</p>
                     </div>
                  </a>
                  <div className="menus">
                     <a href="<?= base_url() ?>index.php/DosenMahasiswa"><i className="fas fa-users"></i> Dosen & Mahasiswa </a>
                     <a href="<?= base_url() ?>index.php/IjazahTranskrip"><i className="fas fa-file-signature"></i> Ijazah & Transkrip</a>
                     <a href="<?= base_url() ?>index.php/Penilaian"><i className="fas fa-award"></i> Penilaian</a>
                     <a href="<?= base_url() ?>index.php/MataKuliah"><i className="fas fa-book"></i> Mata Kuliah</a>
                     <a href="<?= base_url() ?>index.php/ProgramStudi"><i className="fas fa-graduation-cap"></i> Program Studi</a>
                     <a href="<?= base_url() ?>index.php/Kota"><i className="fas fa-building"></i> Kota</a>
                  </div>
               </div>
               <button 
                  title="Keluar dari Akun" 
                  className="bgred btnlogout"
                  onClick={handleLogOut}
               >Log Out</button>
            </div>
         </nav>
      )
   }
   const root = document.querySelector("#apps")
   const el = ReactDOM.createRoot(root)
   el.render(<App />)
</script>
