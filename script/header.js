class Header extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
      this.innerHTML = `
          <nav
              class="navbar navbar-expand-lg navbar-light"
              style="background-color: transparent; height: 60px; position: absolute;padding: .4rem 2rem !important;"
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
                          <a class="nav-link ${this.getAttribute('active') == 'beranda' ? 'active' : ''}" href="./admin_beranda.php">Beranda</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'produk' ? 'active' : ''}" href="#">Produk</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'rundown' ? 'active' : ''}" href="#">Riwayat</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link ${this.getAttribute('active') == 'register' ? 'active' : ''}" href="#">Kontak</a>
                      </li>
                      <li class="nav-item" ${this.getAttribute('logged') == 'false' ? 'style="display: none;"' : ''}>
                          <a class="nav-link" href="./logout.php">Logout</a>
                      </li>
                  </ul>
              </div>
          </nav>
          `;
    }
  }
  
  customElements.define("main-header", Header);