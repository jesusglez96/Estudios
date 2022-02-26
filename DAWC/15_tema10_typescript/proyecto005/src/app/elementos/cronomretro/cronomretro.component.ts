import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-cronomretro',
  templateUrl: './cronomretro.component.html',
  styleUrls: ['./cronomretro.component.css'],
})
export class CronomretroComponent {
  segundo = 0;
  @Input() inicio: number = 0;
  @Output() finalcountdown = new EventEmitter();
  constructor() {}

  cuentaAtras() {
    this.segundo = this.inicio;
    let interval = setInterval(() => {
      if (this.segundo > 0) {
        this.segundo--;
        this.finalcountdown.emit(this.segundo);
      } else clearInterval(interval);
    }, 1000);
  }
}
