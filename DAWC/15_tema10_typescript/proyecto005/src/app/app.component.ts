import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'proyecto005';
  mensaje='';

  actualizar(t: number) {
    if (t == 0) this.mensaje = `Estas hecho un campeon`;
    else this.mensaje = ``;
  }
}
