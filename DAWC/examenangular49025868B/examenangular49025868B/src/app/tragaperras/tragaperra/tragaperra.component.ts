import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';

@Component({
  selector: 'app-tragaperra',
  templateUrl: './tragaperra.component.html',
  styleUrls: ['./tragaperra.component.css'],
})
export class TragaperraComponent {
  @Input() credito!: number;
  @Output() sinCredito = new EventEmitter();
  fotos: string[] = [
    'bar',
    'campana',
    'cereza',
    'limon',
    'naranja',
    'platano',
    'sandia',
    'uva',
    'siete',
  ]; //

  saldo: number = 0;
  @Output() premio = new EventEmitter();

  foto1!: string;
  foto2!: string;
  foto3!: string;
  constructor() {}

  jugar(): void {
    if (this.credito > 5) {
      this.saldo = 0;
      let combinacion: number[] = [];
      for (let i = 0; i < 3; i++) {
        combinacion.push(Math.floor(Math.random() * 8));
      }

      this.foto1 = this.fotos[combinacion[0]] + '.png';
      this.foto2 = this.fotos[combinacion[1]] + '.png';
      this.foto3 = this.fotos[combinacion[2]] + '.png';
      this.credito -= 5;
      if (
        (this.fotos[combinacion[0]] == this.fotos[combinacion[1]] ||
          this.fotos[combinacion[1]] == this.fotos[combinacion[2]]) &&
        this.fotos[combinacion[1]] != 'siete'
      ) {
        this.saldo = 5;
        this.credito += 5;
        this.premio.emit(5);
      }
      if (
        (this.fotos[combinacion[0]] == this.fotos[combinacion[1]] ||
          this.fotos[combinacion[0]] == this.fotos[combinacion[2]]) &&
        this.fotos[combinacion[0]] != 'siete'
      ) {
        this.saldo = 5;
        this.credito += 5;
        this.premio.emit(5);
      } else if (
        this.fotos[combinacion[0]] == this.fotos[combinacion[1]] &&
        this.fotos[combinacion[0]] == this.fotos[combinacion[2]] &&
        this.fotos[combinacion[0]] != 'siete'
      ) {
        this.saldo = 20;
        this.credito += 20;
        this.premio.emit(20);
      } else if (
        this.fotos[combinacion[0]] == this.fotos[combinacion[1]] &&
        this.fotos[combinacion[0]] == this.fotos[combinacion[2]] &&
        this.fotos[combinacion[0]] == 'siete'
      ) {
        this.saldo = 1000;
        this.credito += 1000;
        this.premio.emit(1000);
      }
    } else {
      this.sinCredito.emit(`No puedes jugar, solo tienes ${this.credito}`);
    }
  }
}
