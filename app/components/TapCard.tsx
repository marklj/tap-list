import type { Beer } from "~/data/beers.ts";

interface TapCardProps {
  beer: Beer;
}

export default function TapCard({ beer }: TapCardProps) {
  return (
    <div className="flex items-center gap-6">
      <div className="flex flex-col items-center gap-1 shrink-0">
        <div className="border-yellow-500 text-gray-900 bg-yellow-200 border-8 w-28 h-28 rounded-full text-6xl font-black flex items-center justify-center">
          {beer.number}
        </div>
        {beer.tapLabel && (
          <div className="text-sm font-bold uppercase tracking-widest text-yellow-400">{beer.tapLabel}</div>
        )}
      </div>
      <div className="min-w-0">
        <div className="text-6xl font-black uppercase leading-tight">{beer.name}</div>
        <div className="text-3xl font-light uppercase">{beer.style}</div>
        <div className="flex gap-8 text-3xl font-light uppercase mt-1">
          <div>{beer.abv}% ABV</div>
          <div>{beer.ibu} IBU</div>
        </div>
      </div>
    </div>
  );
}
