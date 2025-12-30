import TapCard from "~/components/TapCard.tsx";
import { beers } from "~/data/beers.ts";

export default function Index() {
  return (
    <div className="mx-auto max-w-4xl mt-8">
      <div className="w-full">
        {beers.map((beer) => (
          <TapCard key={beer.number} beer={beer} />
        ))}
      </div>
    </div>
  );
}
