import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  art={
    codigo:0 ,
    descripcion:"",
    precio: 0,
    ubicacion: "",
  }

  articulos = [{codigo:1, descripcion:'papas', precio:10.55, ubicacion:"Los palacios"},
               {codigo:2, descripcion:'manzanas', precio:12.10, ubicacion:"Los molares"},
               {codigo:3, descripcion:'melon', precio:52.30, ubicacion:"El palmar"},
               {codigo:4, descripcion:'cebollas', precio:17, ubicacion:"Montellano"},
               {codigo:5, descripcion:'calabaza', precio:20, ubicacion:"Utrera"},
              ];

  hayRegistros() {
    return this.articulos.length>0;
  }

  borrar(codigo:number) {
    for(let x=0;x<this.articulos.length;x++)
      if (this.articulos[x].codigo==codigo)
      {
        this.articulos.splice(x,1);
        return;
      }
  }

  agregar() {
    if (this.art.codigo==0) {
      alert('Debe ingresar un código de articulo distinto a cero');
      return;
    }
    for(let x=0;x<this.articulos.length;x++)
    if (this.articulos[x].codigo==this.art.codigo)
    {
      alert('ya existe un articulo con dicho codigo');
      return;
    }
    this.articulos.push({codigo:this.art.codigo,
                        descripcion:this.art.descripcion,
                        precio: this.art.precio,
                        ubicacion: this.art.ubicacion});
    this.art.codigo=0;
    this.art.descripcion="";
    this.art.precio = 0;
    this.art.ubicacion = "";
  }

  seleccionar(art: { codigo: number; descripcion: string; precio: number; ubicacion: string}) {
    this.art.codigo=art.codigo;
    this.art.descripcion=art.descripcion;
    this.art.precio=art.precio;
    this.art.ubicacion=art.ubicacion;
  }

  modificar() {
    for(let x=0;x<this.articulos.length;x++)
      if (this.articulos[x].codigo==this.art.codigo)
      {
        this.articulos[x].descripcion=this.art.descripcion;
        this.articulos[x].precio = this.art.precio;
        this.articulos[x].ubicacion = this.art.ubicacion;
        return;
      }
    alert('No existe el código de articulo ingresado');
  }
}
