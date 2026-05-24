import TapCard from "~/components/TapCard.tsx";
import { beers } from "~/data/beers.ts";

export default function Index() {
  return (
    <div className="mx-auto max-w-7xl mt-8 px-8">
      <div className="grid grid-cols-2 gap-x-16 gap-y-10">
        {beers.map((beer) => (
          <TapCard key={beer.number} beer={beer} />
        ))}
      </div>
    </div>
  );
}
