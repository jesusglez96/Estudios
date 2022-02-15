import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-selectornumerico-component',
  templateUrl: './selectornumerico-component.component.html',
  styleUrls: ['./selectornumerico-component.component.css']
})
export class SelectornumericoComponentComponent implements OnInit {

  @Input() minimo: number=1;
  @Input() maximo: number=1;
  actual: number=1;
  constructor() { }

  ngOnInit() {
    this.actual = this.minimo;
  }

  incrementar() {
    if (this.actual<this.maximo)
      this.actual++;
  }

  decrementar() {
    if (this.actual>this.minimo)
      this.actual--;
  }

  fijar(v:number) {
    if (v>=this.minimo && v<=this.maximo)
      this.actual=v;
  }

  resetear() {
    this.actual=0;
  }

}
