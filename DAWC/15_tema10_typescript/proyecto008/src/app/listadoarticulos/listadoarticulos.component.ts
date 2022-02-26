import { Component, OnInit, Input } from '@angular/core';
import { Articulos } from '../models/ArticulosInterface';

@Component({
  selector: 'app-listadoarticulos',
  templateUrl: './listadoarticulos.component.html',
  styleUrls: ['./listadoarticulos.component.css'],
})
export class ListadoarticulosComponent implements OnInit {
  @Input() datos: Articulos[] = [
    {
      codigo: 0,
      descripcion: '',
      precio: 0,
    },
  ];

  constructor() {}

  ngOnInit() {}
}
