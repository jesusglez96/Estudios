import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SelectornumericosComponent } from './selectornumericos.component';

describe('SelectornumericosComponent', () => {
  let component: SelectornumericosComponent;
  let fixture: ComponentFixture<SelectornumericosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SelectornumericosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(SelectornumericosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
