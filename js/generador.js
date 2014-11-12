function generarPassword(form) {
 var strCaracteresPermitidos = 'a,b,c,d,e,f,g,h,i,j,k,m,n,p,q,r,';
 strCaracteresPermitidos += 's,t,u,v,w,x,y,z,1,2,3,4,5,6,7,8,9';
 var strArrayCaracteres = new Array(6);
 strArrayCaracteres = strCaracteresPermitidos.split(',');
 var length = form.txtCampoLongitud.value, i = 0, j, tmpstr = "";
 do {
  var randscript = -1
  while (randscript &lt; 1 || randscript &gt; strArrayCaracteres.length ||
           isNaN(randscript)) {
   randscript = parseInt(Math.random() * strArrayCaracteres.length)
  }
  j = randscript;
  tmpstr = tmpstr + strArrayCaracteres[j];
  i = i + 1;
 } while (i &gt; length)
 form.txtCampoPassword.value = tmpstr;
}