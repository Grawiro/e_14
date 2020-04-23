function dodaj(x, y){
  return x+y;
}

function bez_arg(){
  document.write(arguments.length+":[");
  for(var i=0;i<arguments.length;i++){ 
    document.write(arguments[i]+"/");
  }
  document.write("]<br>");
}

function tworze_obiekt(zmienna_1,zmienna_2){
  this.zmienna_1=zmienna_1;
  this.zmienna_2=zmienna_2;
  tworze_obiekt.prototype.poka = function(){
    document.write(this.zmienna_1+" "+this.zmienna_2+"<br>")
  }
}
