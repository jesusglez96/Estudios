import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SelectornumericoComponentComponent } from './selectornumerico-component.component';

describe('SelectornumericoComponentComponent', () => {
  let component: SelectornumericoComponentComponent;
  let fixture: ComponentFixture<SelectornumericoComponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SelectornumericoComponentComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SelectornumericoComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
