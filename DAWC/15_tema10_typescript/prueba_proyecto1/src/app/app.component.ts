import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title: string = 'Jesus Gonzalez Nieto';

  edad: number = 21;
  email: string = "jezu96@gmail.com";
  sueldos: any[] = [1700, 1600, 1900, 2400, 1500, 600, "Javier", true];
  activo: boolean = true;

  contador: number = 0;
  
  esActivo(): string {
    return (this.activo) ? "Trabajador activo" : "Trabajador inactivo";
  }

  incrementar():void {
    this.contador++;
  }
  decrementar():void {this.contador--;}

}
