class MobileMenuNavBar {
    constructor(mobileMenu, cabecalhoLista, cabecalhoListaItem) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.cabecalhoLista = document.querySelector(cabecalhoLista);
        this.cabecalhoListaItem = document.querySelectorAll(cabecalhoListaItem);
        this.activeClass = 'active';
        this.overflowY = true;

        this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
        this.cabecalhoListaItem.forEach((link, index) => {
          link.style.animation
            ? (link.style.animation = "")
            : (link.style.animation = `navLinkFade 0.5s ease forwards ${
                index / 7 + 0.3
              }s`);
        });
      }

    handleClick() {
        this.mobileMenu.classList.toggle(this.activeClass);
        this.cabecalhoLista.classList.toggle(this.activeClass);
        this.animateLinks();
        document.body.style.overflowY = this.overflowY ? "hidden" : "visible";
        this.overflowY = !this.overflowY;
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if(this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileMenuNavBar = new MobileMenuNavBar(
    '.mobile-menu',
    '.cabecalho-lista',
    '.cabecalho-lista__item'
);

mobileMenuNavBar.init();

const cabecalho = document.querySelector('.cabecalho');
const cabecalhoContainer = document.querySelector('.cabecalho .container');
document.addEventListener("scroll", () => {
    let distTop = window.pageYOffset;
    console.log(distTop);
    if(distTop >= 100){
        cabecalhoContainer.classList.add('scroll-menu-nav');
        cabecalho.classList.add('scroll-menu-nav');
    } else {
        cabecalho.classList.remove('scroll-menu-nav');
        cabecalhoContainer.classList.remove('scroll-menu-nav');
    }

});