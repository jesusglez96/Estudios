// import { Component, OnInit } from '@angular/core';
import { Component, Input, Output, EventEmitter } from '@angular/core';
@Component({
  selector: 'app-cronometro',
  templateUrl: './cronometro.component.html',
  styleUrls: ['./cronometro.component.css']
})
export class CronometroComponent {

  segundo=0;
  @Input() inicio: number=0;
  @Output() finalcountdown  = new EventEmitter();
  constructor() { }

  cuentaAtras() {
    this.segundo = this.inicio;
    let interval = setInterval(() => {
      if (this.segundo > 0) {
        this.segundo--;
        this.finalcountdown.emit(this.segundo);
      }
      else clearInterval(interval);
    }, 1000);
  }

}
