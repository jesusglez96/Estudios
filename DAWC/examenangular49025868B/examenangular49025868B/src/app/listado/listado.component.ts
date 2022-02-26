import { Component, OnInit, ViewChild } from '@angular/core';
import { AlumnosService } from '../../listado/alumnos.service';
import { ListadoPipe } from '../listado.pipe';
import { Alumno } from '../../listado/alumno.interface';
import { MatTable } from '@angular/material/table';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css'],
})
export class ListadoComponent implements OnInit {
  alumnos!: Alumno[];
  // @ViewChild(MatTable) tabla!: MatTable<Alumno>;
  // columnas: string[] = ['nombre', 'email', 'curso', 'repetidor'];
  // alumnoselect: Alumno = {
  //   id: 0,
  //   nombre: '',
  //   mail: '',
  //   curso: '',
  //   repetidor: '',
  //   observaciones: '',
  // };
  constructor(private alumnosService: AlumnosService) {}

  ngOnInit(): void {
    this.alumnosService.index().subscribe((res) => {
      this.alumnos = ListadoPipe.prototype.transform(
        JSON.parse(JSON.stringify(res))
      );
      this.alumnos.forEach((element) => {
        console.log(element);
      });
      // console.log(JSON.parse(JSON.stringify(res)));
      console.log(this.alumnos);
    });
    // console.log(this.alumnos);
  }
}
