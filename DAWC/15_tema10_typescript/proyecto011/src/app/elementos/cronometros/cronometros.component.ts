import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cronometros',
  templateUrl: './cronometros.component.html',
  styleUrls: ['./cronometros.component.css'],
})
export class CronometrosComponent {
  title = 'proyecto005';
  mensaje = '';

  actualizar(t: number) {
    if (t == 0) this.mensaje = `Estas hecho un campeon`;
    else this.mensaje = ``;
  }
}
