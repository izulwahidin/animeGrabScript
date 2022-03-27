    <footer class="bg-dark text-center text-lg-start">
      <div class="text-center text-light p-3">
      	<a class="text-light" href="/"><?=TITLE?></a>
        ©2011-<?= date('Y') ?> by wGrab
      </div>
    </footer>
    <script src="<?=DOMAIN?>/html/assets/js/bootstrap.bundle.min.js"></script>
    <script>
    localStorage.setItem('w'+sha1(window.location.href),'true');
    document.querySelectorAll('#check_eps').forEach(v => {
      let hashed = 'w'+sha1(v.href);
      // v.addEventListener('click', () => {
      //   localStorage.setItem(hashed,'true');
      // });

      if(localStorage.getItem(hashed) == 'true'){
        if(v.childNodes[1].localName == "span"){
          v.childNodes[1].textContent = 'Watched';
        }else if(v.childNodes[5].localName == 'p'){
          v.childNodes[5].textContent = 'Watched';
          }
        }
    });
    </script>
  </body>
</html>
