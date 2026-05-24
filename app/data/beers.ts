export interface Beer {
  number: string | number;
  name: string;
  style: string;
  abv: number;
  ibu: number;
  tapLabel?: string;
}

export const beers: Beer[] = [
  { number: 1, name: "Sun Squeeze", style: "Thiolized Session Lager", abv: 4.0, ibu: 5 },
  { number: 2, name: "Field & Fog", style: "Adjunct Hazy IPA", abv: 6.2, ibu: 17 },
  { number: 3, name: "Solar Flare", style: "IPA", abv: 8.0, ibu: 34 },
  { number: 4, name: "Squeeze Play", style: "Apricot Sour", abv: 6.5, ibu: 12 },
  { number: "A", name: "Bourbon Noir", style: "Barrel Aged Imperial Stout", abv: 9.5, ibu: 50, tapLabel: "The Vault" }
];
