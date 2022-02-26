import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { AlumnosService } from '../alumnos.service';

@Component({
  selector: 'app-alta',
  templateUrl: './alta.component.html',
  styleUrls: ['./alta.component.css'],
})
export class AltaComponent {
  formAlumno: FormGroup = this.fb.group({
    nombre: ['', Validators.required],
    mail: ['', [Validators.required]],
    curso: ['', [Validators.required]],
    repetidor: ['', [Validators.required]],
    observaciones: ['', [Validators.required]],
  });
  constructor(
    private alumnosService: AlumnosService,
    private fb: FormBuilder
  ) {}

  nuevoAlumno(): void {
    const body = {
      nombre: this.formAlumno.value.nombre,
      mail: this.formAlumno.value.mail,
      curso: this.formAlumno.value.curso,
      repetidor: this.formAlumno.value.repetidor,
      observaciones: this.formAlumno.value.observaciones,
    };

    this.alumnosService.add(body).subscribe((res) => {
      console.log(res);
    });
  }
}
