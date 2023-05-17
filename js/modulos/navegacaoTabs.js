export default function initNavTabs(){
    // NAVEGAÇÃO POR TABS
    const tabMenu = document.querySelectorAll('[data-js-tabMenu-item]');
    // console.log(tabMenu.length);
    const tabContent = document.querySelectorAll('[data-js-tabMenu-content]');
    // console.log(tabContent.length);
    if(tabMenu.length && tabContent.length){
        tabMenu[0].classList.add('ativo');
        tabContent[0].classList.add('ativo');
        function ativarTab(index){
            tabMenu.forEach((item)=>{
                item.classList.remove('ativo');
            });
            tabContent.forEach((content)=>{
                content.classList.remove('ativo');
            });
            tabMenu[index].classList.add('ativo');
            tabContent[index].classList.add('ativo');
        }
        
        tabMenu.forEach((itemMenu, index)=>{
            itemMenu.addEventListener('click',()=>{
                ativarTab(index);
            });
        });
    }
}