export interface Beer {
  number: number;
  name: string;
  style: string;
  abv: number;
  ibu: number;
}

export const beers: Beer[] = [
  { number: 1, name: "Smart Blonde", style: "Blonde Ale", abv: 5.1, ibu: 16 },
  { number: 2, name: "Deep End", style: "Hazy IPA", abv: 6.4, ibu: 81 },
  { number: 3, name: "Tropical Mirage", style: "New Zealand IPA", abv: 7.8, ibu: 60 },
  { number: 4, name: "Just Sour", style: "Sour", abv: 0, ibu: 0 }
];
