$(document).ready(function(){
    class MenuNavigation {
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
    
    const menuNavigation = new MenuNavigation(
        '.mobile-menu',
        '.cabecalho-lista',
        '.cabecalho-lista__item'
    );
    
    menuNavigation.init();
    
    const marcador = document.querySelector('.marcador');
    const menuItem = document.querySelectorAll('.cabecalho-lista__item a');
    function itemAtual(e) {
        marcador.style.left = e.offsetLeft+"px";
        marcador.style.width = e.offsetWidth+"px";
    }
    menuItem.forEach(link => {
        link.addEventListener('mouseover', (e) => {
            itemAtual(e.target);
            
        });
    });
    
    const cabecalho = document.querySelector('.cabecalho');
    const cabecalhoContainer = document.querySelector('.cabecalho .container');
    document.addEventListener("scroll", () => {
        let distTop = window.pageYOffset;
        if(distTop >= 1){
            cabecalhoContainer.classList.add('scroll-menu-nav');
            cabecalho.classList.add('scroll-menu-nav');
        } else {
            cabecalho.classList.remove('scroll-menu-nav');
            cabecalhoContainer.classList.remove('scroll-menu-nav');
        }
    });
    
    let iconeFavorito = document.querySelectorAll(".icone-favorito path");
    
    for(i = 0; i < iconeFavorito.length; i++) {
        iconeFavorito[i].addEventListener("click", function(){
            this.classList.toggle("animation-icone-favorito");
        });
    }

    $('.receita__slide-info__imagem').slick({
        autoplay: true,
        arrows: false,
        dots: true,
        autoplaySpeed: 2500,
        fade: true,
    });

    $('.pagina-inicial .card-receitas .container').slick({
        arrows: true,
        centerMode: false,
        slidesToShow: 2,
        autoPlay: true,
        autoplaySpeed: 1000,  
        responsive: [
            {
            breakpoint: 888,
            settings: {
                arrows: true,
                centerMode: false,
                slidesToShow: 1
                }
            }
        ]
    });
});
