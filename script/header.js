class Header extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      this.innerHTML = `
          <nav
              class="navbar navbar-expand-lg navbar-light"
              style="background-color: transparent; height: 60px; position: absolute;"
              >
              <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
              >
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="../res/navlogo.png" alt="" width="110" height="47" class="d-inline-block align-text-top">
                </a>
            </div>  
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'beranda' ? 'active' : ''}" href="./Beranda.html">Beranda</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'rules' ? 'active' : ''}" href="./rules.html">Produk</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'rundown' ? 'active' : ''}" href="./rundown.html">Riwayat</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'register' ? 'active' : ''}" href="./register.html">Kontak</a>
                      </li>
                  </ul>
              </div>
          </nav>
          `;
    }
  }
  
  customElements.define("main-header", Header);