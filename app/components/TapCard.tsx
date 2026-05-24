import type { Beer } from "~/data/beers.ts";

interface TapCardProps {
  beer: Beer;
}

export default function TapCard({ beer }: TapCardProps) {
  return (
    <div className="flex items-center gap-4">
      <div className="flex flex-col items-center gap-1">
        <div className="border-yellow-500 text-gray-900 bg-yellow-200 border-8 w-20 h-20 rounded-full padding-2 text-5xl font-black flex items-center justify-center">
          {beer.number}
        </div>
        {beer.tapLabel && (
          <div className="text-xs font-bold uppercase tracking-widest text-yellow-400">{beer.tapLabel}</div>
        )}
      </div>
      <div>
        <div className="text-5xl font-black uppercase shadow-sm">{beer.name}</div>
        <div className="flex gap-6">
          <div className="text-2xl font-light uppercase">{beer.style}</div>
          <div className="text-2xl font-light uppercase">{beer.abv}% ABV</div>
          <div className="text-2xl font-light uppercase">{beer.ibu} IBU</div>
        </div>
      </div>
    </div>
  );
}
