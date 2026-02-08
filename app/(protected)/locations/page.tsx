import { PageHeader } from '@/components/layout/page-header'
import { Button } from '@/components/ui/button'
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from '@/components/ui/card'
import { Plus, MapPin } from 'lucide-react'

export default function LocationsPage() {
  return (
    <div>
      <PageHeader
        title="Locations"
        description="Manage the spaces you want to maintain"
      >
        <Button>
          <Plus className="mr-2 h-4 w-4" />
          Add Location
        </Button>
      </PageHeader>
      <div className="p-6">
        <Card>
          <CardHeader>
            <CardTitle>No locations yet</CardTitle>
            <CardDescription>
              Get started by adding your first location to track
            </CardDescription>
          </CardHeader>
          <CardContent>
            <div className="flex flex-col items-center justify-center py-8 text-center">
              <div className="flex h-12 w-12 items-center justify-center rounded-full bg-muted">
                <MapPin className="h-6 w-6 text-muted-foreground" />
              </div>
              <p className="mt-4 text-sm text-muted-foreground">
                Locations are the spaces you want to maintain - rooms, surfaces,
                outdoor areas, or any space that needs regular attention.
              </p>
              <Button className="mt-4">
                <Plus className="mr-2 h-4 w-4" />
                Add Your First Location
              </Button>
            </div>
          </CardContent>
        </Card>
      </div>
    </div>
  )
}
