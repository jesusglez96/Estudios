function volumenTroncoCono(rInf, rSup, h) {
  let volumen =
    ((h * Math.PI) / 3) * (Math.pow(rInf, 2) + Math.pow(rSup, 2) + rInf * rSup);
  return Math.round(volumen * 10000) / 10000;
}
