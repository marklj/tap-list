import type { Beer } from "~/data/beers.ts";

interface TapCardProps {
  beer: Beer;
}

export default function TapCard({ beer }: TapCardProps) {
  return (
    <div className="flex items-center gap-6 mt-24">
      <div className="border-yellow-500 text-gray-900 bg-yellow-200 border-8 w-28 h-28 rounded-full padding-2 text-7xl font-black flex items-center justify-center">
        {beer.number}
      </div>
      <div>
        <div className="text-7xl font-black uppercase shadow-sm">{beer.name}</div>
        <div className="flex gap-16">
          <div className="text-4xl font-light uppercase">{beer.style}</div>
          <div className="text-4xl font-light uppercase">{beer.abv}% ABV</div>
          <div className="text-4xl font-light uppercase">{beer.ibu} IBU</div>
        </div>
      </div>
    </div>
  );
}
