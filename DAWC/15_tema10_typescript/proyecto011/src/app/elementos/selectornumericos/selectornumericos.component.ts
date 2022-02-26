import { Component, ViewChild } from '@angular/core';
import { SelectornumericoComponent } from './selectornumerico/selectornumerico.component';

@Component({
  selector: 'app-selectornumericos',
  templateUrl: './selectornumericos.component.html',
  styleUrls: ['./selectornumericos.component.css'],
})
export class SelectornumericosComponent {
  @ViewChild('selector1') selector1!: SelectornumericoComponent;
  @ViewChild('selector2') selector2!: SelectornumericoComponent;

  fijarSelector1(valor: number) {
    this.selector1.fijar(valor);
  }

  fijarSelector2(valor: number) {
    this.selector2.fijar(valor);
  }

  resetearSelector1() {
    this.selector1.resetear();
  }
  resetearSelector2() {
    this.selector2.resetear();
  }
}
