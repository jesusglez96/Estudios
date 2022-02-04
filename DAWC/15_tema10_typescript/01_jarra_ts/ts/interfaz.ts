export interface JarraInterfaz {
    llenar(): void;

    vaciar(): void;

    llenarDesde(jarra: Object): void;
    
    toString(): string;

    //  static comparar(jarra1:Object, jarra2:Object):Object;
}