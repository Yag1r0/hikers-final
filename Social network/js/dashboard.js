/*start*/
var id = function(param){
    return document.getElementById(param)
};
var classname = function(param){
    return document.getElementsByClassName(param)
};
var makeimage = function(param){
    return `<img src='${param}' alt='user image'/>`;
}
/* end helper methods */
var allimages = classname('clickable');
/****************************/
/* if clicked on any image */
/***************************/
for(x=0; x<allimages.length; x++){
allimages[x].addEventListener('click', function(event){
    id('modal_window').style.display = 'block';
    //id('column_image').appendChild(event.target);
    id('column_image').innerHTML = makeimage(event.target.src);
    prikazEksternogFajla(event.target.id);
});
}
/****************************/
/* if clicked outside modal content */
/***************************/
id('modal_window').addEventListener('click', function(event){
    // if closest el is modal_content
    if (event.target.closest("#modal_content")) return 0;
    // If user clicks outside the element, hide it!
    id('modal_window').style.display = 'none';
})
    
/****************************/
/* if clicked on X button */
/***************************/    
id('closebtn').addEventListener('click', function(event){
    id('modal_window').style.display = 'none';
});
    
document.body.addEventListener('keydown', function(event){
    if (event.keyCode == 27) {
        id('modal_window').style.display = 'none';
    }
});