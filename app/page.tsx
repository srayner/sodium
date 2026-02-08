import Link from 'next/link'
import { Button } from '@/components/ui/button'
import { Badge } from '@/components/ui/badge'
import { Sparkles, MapPin, CalendarClock, Activity } from 'lucide-react'

export default function HomePage() {
  return (
    <div className="flex min-h-screen flex-col">
      <header className="border-b">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <div className="flex items-center gap-2">
            <div className="flex h-8 w-8 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Sparkles className="h-4 w-4" />
            </div>
            <span className="font-semibold">Sodium</span>
          </div>
          <nav className="flex items-center gap-4">
            <Button asChild variant="ghost">
              <Link href="/login">Sign in</Link>
            </Button>
            <Button asChild>
              <Link href="/register">Get Started</Link>
            </Button>
          </nav>
        </div>
      </header>

      <main className="flex-1">
        <section className="container mx-auto flex flex-col items-center justify-center gap-6 px-4 py-24 text-center md:py-32">
          <Badge variant="secondary" className="text-sm">
            Maintenance Made Simple
          </Badge>
          <h1 className="text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">
            Keep Every Space
            <br />
            <span className="text-primary">Pristine</span>
          </h1>
          <p className="max-w-[600px] text-lg text-muted-foreground">
            Track maintenance schedules for every room, surface, and outdoor
            space. Never wonder when something was last done again.
          </p>
          <div className="flex gap-4">
            <Button asChild size="lg">
              <Link href="/register">Get Started</Link>
            </Button>
            <Button asChild variant="outline" size="lg">
              <Link href="/login">Sign in</Link>
            </Button>
          </div>
        </section>

        <section className="border-t bg-muted/40">
          <div className="container mx-auto px-4 py-16">
            <h2 className="mb-8 text-center text-2xl font-semibold">
              How It Works
            </h2>
            <div className="grid gap-8 md:grid-cols-3">
              <div className="flex flex-col items-center space-y-3 text-center">
                <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <MapPin className="h-6 w-6" />
                </div>
                <h3 className="font-semibold">Add Locations</h3>
                <p className="text-sm text-muted-foreground">
                  Register the spaces you want to maintain - rooms, surfaces,
                  appliances, or any area that needs regular attention.
                </p>
              </div>
              <div className="flex flex-col items-center space-y-3 text-center">
                <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <CalendarClock className="h-6 w-6" />
                </div>
                <h3 className="font-semibold">Schedule Tasks</h3>
                <p className="text-sm text-muted-foreground">
                  Create recurring maintenance schedules. Set how often each
                  task needs doing - daily, weekly, monthly, or custom.
                </p>
              </div>
              <div className="flex flex-col items-center space-y-3 text-center">
                <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10 text-primary">
                  <Activity className="h-6 w-6" />
                </div>
                <h3 className="font-semibold">Track Status</h3>
                <p className="text-sm text-muted-foreground">
                  Monitor the maintenance status of every location in real-time.
                  Get notified when tasks are due.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section className="border-t">
          <div className="container mx-auto px-4 py-16">
            <h2 className="mb-4 text-center text-2xl font-semibold">
              Status at a Glance
            </h2>
            <p className="mb-8 text-center text-muted-foreground">
              Every location displays its current status based on when it was
              last maintained
            </p>
            <div className="flex flex-wrap justify-center gap-3">
              <Badge className="bg-green-500 hover:bg-green-500/90">
                Excellent
              </Badge>
              <Badge className="bg-blue-500 hover:bg-blue-500/90">Good</Badge>
              <Badge className="bg-yellow-500 hover:bg-yellow-500/90">
                Fair
              </Badge>
              <Badge className="bg-orange-500 hover:bg-orange-500/90">
                Needs Attention
              </Badge>
              <Badge className="bg-red-500 hover:bg-red-500/90">Critical</Badge>
            </div>
          </div>
        </section>

        <section className="border-t bg-primary/5">
          <div className="container mx-auto flex flex-col items-center gap-6 px-4 py-16 text-center">
            <h2 className="text-2xl font-semibold">
              Ready to stay on top of maintenance?
            </h2>
            <p className="max-w-[500px] text-muted-foreground">
              Start tracking today and never lose track of your maintenance
              schedule again.
            </p>
            <Button asChild size="lg">
              <Link href="/register">Get Started for Free</Link>
            </Button>
          </div>
        </section>
      </main>

      <footer className="border-t py-6">
        <div className="container mx-auto flex items-center justify-center px-4">
          <p className="text-sm text-muted-foreground">
            Sodium - Maintenance tracking for every space
          </p>
        </div>
      </footer>
    </div>
  )
}
